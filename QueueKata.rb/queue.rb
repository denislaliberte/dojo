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
end

