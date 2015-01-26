class Queue
  def empty
    if @item
      false
    else
      true
    end
  end
  def push(item)
    @item = item
  end
  def pop()
    temp = @item
    @item = nil
    temp
  end
end

